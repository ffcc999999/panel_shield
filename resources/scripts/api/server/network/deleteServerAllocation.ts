import { Allocation } from '@/api/server/getServer';
import http from '@/api/http';

export default async (uuid: string, id: number): Promise<Allocation> =>
    await http.delete(`/api/client/services/${uuid}/network/allocations/${id}`);
