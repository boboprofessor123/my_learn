import { http, httpFile } from './http_service';

// 新增資料
export function createLearn(data) {
    return httpFile().post('/LearnJson', data);
}

// 載入資料
export function loadLearn() {
    return http().get('/LearnJson');
}

// 刪除資料
export function deleteLearn(test) {
    return http().delete(`LearnJson/${test.name}`);
}

// 更新資料
export function updateLearn(test, data) {
    return httpFile().post(`/LearnJson/${test.name}`, data);
}